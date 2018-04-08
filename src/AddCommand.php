<?php

namespace Acme;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;


class AddCommand extends Command{


    public function configure(){
        $this->setName('add')
            ->setDescription("Add a New Task ")
            ->addArgument('Description',InputArgument::REQUIRED);

    }


    public function execute(InputInterface $input , OutputInterface $output){

        $description=$input->getArgument('Description');
        $this->database->query('insert into tasks (description) values (:description)',compact('description'));
        $output->writeln('<info>Task Added</info>');
        $this->showTasks($output);
    }


}