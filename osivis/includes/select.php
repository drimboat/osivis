
                                    <label>
                                    Section <?php echo $sec ?>: 
                                        <select class="form-control" name="sec_<?php echo $sec ?>" oninput="query()">
                                            <option value="0">None</option>
                                            <option value="1">Multiple Choice</option>
                                            <option value="2">True / False</option>
                                            <option value="3">Fill in the blanks</option>
                                            <option value="4">Table</option>
                                        </select>
                                    </label>
                                    <button style="display: none;"class="btn btn-primary btn-lg" data-toggle="modal" data-target="#Modal<?php echo $sec?>">
                            </button>
                            <div class="modal fade" id="Modal<?php echo $sec?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>