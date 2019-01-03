<?php

	/*
	 * Created by: Sainesh Mamgain
	 * @Date: 2016-01-18
	 * 89itworld Software Solutions
	 */

	echo $this->element('Admin/header');
    echo $this->Flash->render();
	echo $this->element('Admin/sidebar');
	echo $this->fetch('content');
	echo $this->element('Admin/footer');
?>