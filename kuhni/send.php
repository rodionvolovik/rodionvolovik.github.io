<?php
	session_start();

	require_once('include/AmoCRM.php');

	if (isset($_POST['phone'])) {

		$crm = new AmoCRM('albamebel', [
			'USER_LOGIN' => 'ceo@alba.com.ua',
			'USER_HASH' => 'c7c67083ff3b66bcafeede8dced5ef17'
		]);


		$offer = $crm->createOffer(17610394, 'Кухня: Консультация', $_SESSION['utm']);

		$offer_id = $offer->response->leads->add[0]->id;

		$contact = $crm->createContact(
			$offer_id,
			$_POST['name'],
			$_POST['email'],
			$_POST['phone']
		);


	}

	header('Location: /spasibo/spasibo_k.html');

?>
