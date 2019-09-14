<?php

namespace BDC\SimpleNews\Plugin;

use BDC\SimpleNews\Console\Command\NewsCreate;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Logger
{
    /**
     * @var OutputInterface
     */
    private $output;

    public function beforeRun(
        NewsCreate $command,
        InputInterface $input,
        OutputInterface $output) {
            $output->writeln('beforeExecute');
    }

    public function aroundRun(
        NewsCreate $command,
        \Closure $proceed,
        InputInterface $input,
        OutputInterface $output) {
            $output->writeln('aroundExecute before call');
            $proceed->call($command, $input, $output);
            $output->writeln('aroundExecute after call');
            $this->output = $output;
    }

    //public function afterRun(NewsCreate $command){
        //$this->output->writeln('afterExecute');
    //}
}
