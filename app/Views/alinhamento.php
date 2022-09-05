<?= $this->extend('template') ?>
<?= $this->section('conteudo') ?>
<!-- o conteúdo da página começa aqui: --> 

<h2 class="mt-4">Alinhamento par-a-par</h2>

<div class="row my-4">
    <h3 class="my-3">Resultado</h3>

    <div class="alert alert-primary" role="alert">
    <pre>
        <?=$resultado?>
    </pre></div>
</div>


<div class="row">
    <h3 class="my-3">Entrada</h3>
    <div class="col-6">
        <h4>Sequência 1</h4>
   <code>
            <?=$seq1?>
        </code>
    </div>
    <div class="col-6">
        <h4>Sequência 2</h4>
        <code>
            <?=$seq2?>
        </code>
    </div>
</div>


<!-- fim conteúdo da página -->
<?= $this->endSection() ?>