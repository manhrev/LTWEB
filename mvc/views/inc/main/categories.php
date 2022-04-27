<div class="sidebar-block">
    <div class="title-block">Danh mục sản phẩm</div>
    <div class="block-content">

        <?php foreach ($data['categories'] as $cate) {?>

        <div class="cateTitle hasSubCategory open level1">
            <!-- <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#livingroom" aria-expanded="false" role="status">
                <i class="zmdi zmdi-minus"></i>
                <i class="zmdi zmdi-plus"></i>
            </span> -->
            <a class="cateItem" href="<?=BASE_URL.'danh-muc/'.$cate['url']?>"><?=ucfirst($cate['name'])?></a>
            <!-- <div class="subCategory collapse" id="livingroom" aria-expanded="true" role="status">
                <div class="cateTitle">
                    <a href="#" class="cateItem">Side Table</a>
                    <div class="subCategory collapse" id="subCategory-fruits" aria-expanded="true" role="status">
                        <div class="cateTitle">
                            <a href="#" class="cateItem">Side Table</a>
                        </div>
                        <div class="cateTitle">
                            <a href="#" class="cateItem">FIREPLACE</a>
                        </div>
                        <div class="cateTitle">
                            <a href="#" class="cateItem">FIREPLACE</a>
                        </div>
                        <div class="cateTitle">
                            <a href="#" class="cateItem">floor lamp</a>
                        </div>
                        <div class="cateTitle">
                            <a href="#" class="cateItem">ottoman</a>
                        </div>
                        <div class="cateTitle">
                            <a href="#" class="cateItem">armchair</a>
                        </div>
                        <div class="cateTitle">
                            <a href="#" class="cateItem">cushion</a>
                        </div>
                    </div>
                </div>
                <div class="cateTitle">
                    <a href="#" class="cateItem">FIREPLACE</a>
                </div>
                <div class="cateTitle">
                    <a href="#" class="cateItem">FIREPLACE</a>
                </div>
                <div class="cateTitle">
                    <a href="#" class="cateItem">floor lamp</a>
                </div>
                <div class="cateTitle">
                    <a href="#" class="cateItem">ottoman</a>
                </div>
                <div class="cateTitle">
                    <a href="#" class="cateItem">armchair</a>
                </div>
                <div class="cateTitle">
                    <a href="#" class="cateItem">cushion</a>
                </div>
            </div> -->
        </div>
        
        <?php }?>

        
    </div>
</div>