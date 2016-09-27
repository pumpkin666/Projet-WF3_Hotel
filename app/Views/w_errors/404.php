<?php $this->layout('layout', ['title' => 'Perdu ?']) ?>

<?php $this->start('main_content'); ?>
<h1>Erreur 404. Perdu ?</h1>
<p>Retour vers l' <a href='<?= $this->url('accueil-index'); ?>' >Accueil</a> <br>
Retour <a href="javascript:history.back()">Page précédente <--</a>
</p>
<?php $this->stop('main_content'); ?>
