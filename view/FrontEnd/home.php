<?php require_once 'partials/FrontEnd/__header.php'?>
    <main role="main">
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Welcome To Our Shop</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <?php foreach ($products as $product): ?>

                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="<?php echo $product->photo?>" alt="<?php echo $product->name;?>">
                                <div class="card-body">
                                    <p class="lead"><?php echo $product->name; ?></p>
                                    <p class="card-text"><?php echo $product->description; ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a  href="/product/<?php echo $product->slug ;?>"><button class="btn btn-sm btn-outline-secondary">View</button></a>
                                            <form action="/cart" method="post">
                                                <input type="hidden" name="id" value="<?php echo $product['id'];?>">
                                                <button type="submit" class="btn btn-sm btn-outline-secondary" name="add">
                                                    Add to Cart
                                                </button>
                                            </form>
                                        </div>
                                        <small class="text-muted">BDT <?php echo $product->price; ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </main>
<?php require_once 'partials/FrontEnd/__footer.php'?>