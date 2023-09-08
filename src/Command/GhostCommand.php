<?php 

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:ghost', 
    description: 'Launch Ghost program.',
    hidden: false,
    aliases: ['app:ghost-prog']
    )]
class GhostCommand extends Command 
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {   
        $outputOceanStyle = new OutputFormatterStyle('white', 'blue');
        $output->getFormatter()->setStyle('ocean', $outputOceanStyle);

        $outputPinkStyle = new OutputFormatterStyle('bright-blue');
        $output->getFormatter()->setStyle('sea', $outputPinkStyle);

        $output->writeln('<comment>=====================</>');
        $output->writeln('<comment>Launching Ghost program</>');
        $output->writeln('<comment>In progress...</>');
        $output->writeln('<comment>=====================</>');
        $output->writeln('');
        $output->writeln('<ocean> Ghost program activated ! </>');
        $output->writeln('');
        $output->writeln([
 '                <sea>###                          ##</>',
 '     ##          <sea>##                          ##</>',
 '    ##  <sea>### ##   ##       ####     #####    #####</>',
 '   ##  <sea>##  ##    #####   ##  ##   ##         ##</>',
 '  ##   <sea>##  ##    ##  ##  ##  ##    #####     ##</>',
 ' ##     <sea>#####    ##  ##  ##  ##        ##    ## ##</>',
 '##         <sea>##   ###  ##   ####    ######      ###</>',
 '       <sea>#####'

        ]);
        $output->writeln('');
        $output->writeln('');
        // Ne fonctionne pas, Cmder ne détectant pas les liens
        $output->writeln('<href="https://symfony.com/doc/current/console.html"><fg=bright-yellow>Click here to see the doc.</></>');
        
        return Command::SUCCESS;
    }
}