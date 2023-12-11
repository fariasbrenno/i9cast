
<?php for ($i = 1; $i <= 6; $i++){ ?>
<!-- VER FOTOS -->
    <div class="modal fade" id="ver_<?=$i?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div style="height:40px;" class="d-j-a">
                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>                    
                    <div class="container">
                        <div class="row">
                            <div style="height: 400px;" class="col-12">
                                <img class="w-100 h-100" src="../public/img/fotos/<?=$foto[$i]['foto']?>">
                            </div>                            
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>