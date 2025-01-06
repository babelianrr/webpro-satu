<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eko Service</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/index.css">
    <link rel="stylesheet" href="assets/carousel.css">
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
</head>

<body>
    <?= $this->include('components/color-toggle') ?>
    <?= $this->include('components/navbar') ?>
    <main>
        <?= $this->renderSection('content') ?>
    </main>
    <?= $this->include('components/footer') ?>
</body>

</html>