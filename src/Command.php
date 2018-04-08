<?php

namespace Acme;
use Symfony\Component\Console\Command\Command as SymfoneCommand;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;


class Command extends SymfoneCommand{


    protected $database;

    public function __construct(DatabaseAdapter  $database)
    {
        $this->database = $database;
        parent::__construct();
    }

    protected function showTasks(OutputInterface $output)
    {
        if (!$tasks = $this->database->fetchAll('tasks')) {
            return $output->writeln('<info>No Tasks at the Moment !</info>');
        }
        $table = new Table($output);
        $table->setHeaders(['id', 'description'])
            ->setRows($tasks)
            ->render();
    }


}