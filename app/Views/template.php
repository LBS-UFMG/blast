<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLAST</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- fim Bootstrap CSS -->
</head>
<body>
    <!-- cabeçalho -->
    <header class="bg-primary p-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="<?=base_url()?>" class="text-light"><i class="bi bi-house-door-fill"></i> Página inicial</a></div>
                <div class="col">
                    <h1 class="text-light">BLAST</h1>
                </div>
            </div>
        </div>
    </header>
    <!-- fim cabeçalho -->

    <!-- conteúdo -->
    <main style="min-height: 200px;" class="p-4">
        <div class="container">
            <?= $this->renderSection('conteudo') ?>
        </div>
    </main>
    <!-- fim conteúdo -->

    <!-- rodapé -->
    <footer class="bg-light text-center p-4">
        <p class="small text-muted container">Reference: Stephen F. Altschul, Thomas L. Madden, Alejandro A.
Schaffer, Jinghui Zhang, Zheng Zhang, Webb Miller, and David J.
Lipman (1997), "Gapped BLAST and PSI-BLAST: a new generation of
protein database search programs", Nucleic Acids Res. 25:3389-3402.s</p>
    </footer>
    <!-- fim rodapé -->

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <!-- fim SCRIPTS -->
</body>
</html>