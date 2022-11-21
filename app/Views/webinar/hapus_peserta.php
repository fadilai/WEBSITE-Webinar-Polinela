<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 style="color:black;" class="modal-title" id="exampleModalLabel">HAPUS DATA</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="<?= base_url('admin/delete/'. $dt['id']); ?>" method="POST">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <div class="modal-body bg-dark">
                                <div class="avatar">
                                    <i class="delicon far fa-trash-alt"></i>
                                    <i class="book fas fa-book-open"></i>
                                </div>
                                <div class="modal-body">
                                    <h5>Apakah anda yakin akan menghapus data ini ?</h5>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="button-class">
                                    <button type="submit" name="delete" class="btn btn-primary">
                                        <i class="fas fa-check"></i>&nbsp;&nbsp;Hapus
                                    </button>

                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" class="button btn btn-danger">
                                        <i class="fas fa-times"></i>&nbsp;&nbsp;Batal
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>