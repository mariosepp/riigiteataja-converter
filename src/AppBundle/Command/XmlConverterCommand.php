<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use AppBundle\Entity\Akt;
use AppBundle\Entity\Metaandmed;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use AppBundle\Entity\Muutmismarge;
use AppBundle\Entity\Osa;
use AppBundle\Entity\Paragrahv;
use AppBundle\Entity\Loige;

class XmlConverterCommand extends ContainerAwareCommand
{
	private $em;
	
	protected function configure()
	{
		$this
			->setName('app:convert-xml')
			->setDescription('Inserts XML to database.')
			->setHelp("Inserts RiigiTeataja xml to db");
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		foreach (scandir("web/xml") as $dir) {
			if ($dir == "." || $dir == "..") continue;
			
			$xml = @simplexml_load_file("web/xml/".$dir);
			$this->em = $this->getContainer()->get('doctrine')->getManager();
			
			$akt = new Akt();
			foreach ($xml as $key1 => $value1) {
				if ($key1 == "metaandmed") {
					$this->createMetaandmed($akt, $value1);
				}
				if ($key1 == "aktinimi") {
					$akt = $this->populateAkt($akt, $value1);
				}
				if ($key1 == "muutmismarge") {
					$this->createMuutmismarge($akt, $value1);
				}
				if ($key1 == "sisu") {
					$osa = null;
					foreach ($value1 as $key2 => $value2) {
						if ($key2 == "osa") {
							$osa = $this->createOsa($akt, $value2);
						}
						if ($key2 == "paragrahv") {
							$this->createParagrahv($osa, $value2);
						}
					}
				}
			}
			
			$this->em->persist($akt);
			$this->em->flush();
		}
	}
	
	private function createMetaandmed(Akt $akt, $value1) 
	{
		$metaandmed = new Metaandmed();
		$metaandmed->setAkt($akt);
		foreach ($value1 as $key2 => $value2) {
			if ($key2 == "valjaandja") $metaandmed->setValjaandja($value2);
			if ($key2 == "dokumentLiik") $metaandmed->setDokumentLiik($value2);
			if ($key2 == "tekstiliik") $metaandmed->setTekstiliik($value2);
			if ($key2 == "dokumentEtapp") $metaandmed->setDokumentEtapp($value2);
			if ($key2 == "dokumentStaatus") $metaandmed->setDokumentStaatus($value2);
			if ($key2 == "skeemiNimi") $metaandmed->setSkeemiNimi($value2);
			if ($key2 == "globaalID") $metaandmed->setGlobaalId($value2);
			if ($key2 == "metaandmedVersioon") $metaandmed->setMetaandmedVersioon($value2);
			if ($key2 == "metaandmedVersioonKuupaev") $metaandmed->setMetaandmedVersioonKuupaev($this->formatDate($value2));
			if ($key2 == "metaandmedVersioonPohjustaja") $metaandmed->setMetaandmedVersioonPohjustaja($value2);
			if ($key2 == "terviktekstiGrupiID") $metaandmed->setTerviktekstGrupiId($value2);
			if ($key2 == "lyhend") $metaandmed->setLyhend($value2);
			if ($key2 == "vastuvoetud") {
				foreach ($value2 as $key3 => $value3) {
					if ($key3 == "aktikuupaev") $metaandmed->setAktikuupaev($this->formatDate($value3));
					if ($key3 == "joustumine") $metaandmed->setJoustumine($this->formatDate($value3));
					if ($key3 == "avaldamismarge") {
						foreach ($value3 as $key4 => $value4) {
							if ($key4 == "RTosa") $metaandmed->setRtOsa($value4);
							if ($key4 == "RTaasta") $metaandmed->setRtAasta($value4);
							if ($key4 == "RTnr") $metaandmed->setRtNr($value4);
							if ($key4 == "RTartikkel") $metaandmed->setRtArtikkel($value4);
							if ($key4 == "aktViide") $metaandmed->setAktViide($value4);
						}
					}
				}
			}
			if ($key2 == "kehtivus") {
				foreach ($value2 as $key3 => $value3) {
					if ($key3 == "kehtivuseAlgus") $metaandmed->setKehtivuseAlgus($this->formatDate($value3));
					if ($key3 == "kehtivuseLopp") $metaandmed->setKehtivuseLopp($this->formatDate($value3));
				}
			}
		}
		
		$this->em->persist($metaandmed);
	}
	
	private function populateAkt(Akt $akt, $value1)
	{
		foreach ($value1 as $key2 => $value2) {
			if ($key2 == "nimi") {
				foreach ($value2 as $key3 => $value3) {
					if ($key3 == "pealkiri") $akt->setAktinimi($value3);
				}
			}
		}
		
		return $akt;
	}
	
	private function createMuutmismarge(Akt $akt, $value1)
	{
		$muutmismarge = new Muutmismarge();
		$muutmismarge->setAkt($akt);
		foreach ($value1 as $key2 => $value2) {
			if ($key2 == "aktikuupaev") $muutmismarge->setAktikuupaev($this->formatDate($value2));
			if ($key2 == "joustumine") $muutmismarge->setJoustumine($this->formatDate($value2));
			if ($key2 == "avaldamismarge") {
				foreach ($value2 as $key3 => $value3) {
					if ($key3 == "RTosa") $muutmismarge->setRtOsa($value3);
					if ($key3 == "RTaasta") $muutmismarge->setRtAasta($value3);
					if ($key3 == "RTnr") $muutmismarge->setRtNr($value3);
					if ($key3 == "RTartikkel") $muutmismarge->setRtArtikkel($value3);
					if ($key3 == "aktViide") $muutmismarge->setAktViide($value3);
				}
			}
		}
	
		$this->em->persist($muutmismarge);
	}
	
	private function createOsa(Akt $akt, $value1)
	{
		$osa = new Osa();
		$osa->setAkt($akt);
		foreach ($value1 as $key2 => $value2) {
			if ($key2 == "osaNr") $osa->setOsaNr($value2);
			if ($key2 == "osaPealkiri") $osa->setOsaPealkiri($value2);
		}
		
		$this->em->persist($osa);
		
		return $osa;
	}
	
	private function createParagrahv(Osa $osa, $value1)
	{
		$paragrahv = new Paragrahv();
		$paragrahv->setOsa($osa);
		foreach ($value1 as $key2 => $value2) {
			if ($key2 == "paragrahvNr") $paragrahv->setParagrahvNr($value2);
			if ($key2 == "paragrahvPealkiri") $paragrahv->setParagrahvPealkiri($value2);
			if ($key2 == "loige") {
				$this->createLoige($paragrahv, $value2);
			}
		}
	
		$this->em->persist($paragrahv);
	}
	
	private function createLoige(Paragrahv $paragrahv, $value1)
	{
		$loige = new Loige();
		$loige->setParagrahv($paragrahv);
		foreach ($value1 as $key2 => $value2) {
			if ($key2 == "loigeNr") $loige->setLoigeNr($value2);
			if ($key2 == "sisuTekst") $loige->setSisuTekst($value2);
		}
	
		$this->em->persist($loige);
	}
	
	private function formatDate($string)
	{
		$string = substr($string, 0, -6);
		$date = new \DateTime($string);
		
		return $date;
	}
}