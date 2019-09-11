<?php
namespace BDC\SimpleNews\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use BDC\SimpleNews\Helper\News;

class NewsCreate extends Command {
    protected $newsHelper;

    public function __construct(News $newsHelper)
    {
        $this->newsHelper = $newsHelper;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('bdcrops:news:create')
            ->setDescription('Create New News')
            ->setDefinition($this->getOptionsList());
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<info>Creating new news...</info>');
        $this->newsHelper->setData($input);
        $this->newsHelper->execute();

        $output->writeln('');
        $output->writeln('<info>News created with the following data:</info>');
        $output->writeln('<comment>News ID: ' . $this->newsHelper->getNewsId());
        $output->writeln('<comment>Title: ' . $input->getOption(News::KEY_TITLE));
        $output->writeln('<comment>Summary: ' . $input->getOption(News::KEY_SUMMARY));
        $output->writeln('<comment>Description: ' . $input->getOption(News::KEY_DESC));

       }

    protected function getOptionsList(){
        return [
            new InputOption(News::KEY_TITLE, null, InputOption::VALUE_REQUIRED, '(Required) News Title'),
            new InputOption(News::KEY_SUMMARY, null, InputOption::VALUE_REQUIRED, '(Required) News Summary'),
            new InputOption(News::KEY_DESC, null, InputOption::VALUE_REQUIRED, '(Required) News Description'),

            ];
    }
}
