<?= $this->extend('template') ?>
<?= $this->section('conteudo') ?>
<!-- o conteúdo da página começa aqui: --> 

<h1 class="mt-5">BLASTp</h1>
<p class="text-muted">Alinhamento par-a-par</p>

<form action="<?=base_url('/blast')?>" method="post">

    <div class="row mt-4">
        <div class="col">
            <textarea rows="5" class="form-control" name="seq1" placeholder="Insira a sequência 1"></textarea>
        </div>
        <div class="col">
            <textarea rows="5" class="form-control" name="seq2" placeholder="Insira a sequência 2"></textarea>
        </div>
    </div>
    <div class="row mb-5">
        <input type="submit" value="BLASTp" class="btn btn-primary my-4 mx-2">
    </div>

</form>

<!-- fim conteúdo da página -->
<?= $this->endSection() ?>