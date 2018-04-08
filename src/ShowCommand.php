<?php

namespace Acme;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;


class ShowCommand extends Command{


    public function configure(){
        $this->setName('showAll')
            ->setDescription("Show All Tasks ");

    }


    public function execute(InputInterface $input , OutputInterface $output){
        $this->showTasks($output);
    }

}