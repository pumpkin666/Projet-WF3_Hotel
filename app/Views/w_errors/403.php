<?php $this->layout('layout', ['title' => 'Rien d\'intéressant ici']) ?>

<?php $this->start('main_content'); ?>
<h1>Erreur 403. Rien d'intéressant ici...</h1>
<p>Retour vers l' <a href='<?= $this->url('accueil-index'); ?>' >Accueil</a> <br>
Retour <a href="javascript:history.back()">Page précédente <--</a>
</p>
<?php $this->stop('main_content'); ?>
