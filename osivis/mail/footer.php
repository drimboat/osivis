        <div class="about mobile-100">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.            
        </div>
        <div class="contact mobile-100">
            <div class="panel-body" style="margin: 0;padding: 0 15px;">
            <h2 style="margin: 0;">Contact Form</h2>
            <p style="display: block;">Trying to reach us concerning any complaint or suggestion?.</p>
            <p>Fill in the for below and we just might get back to you</p>
            </div>
            <div class="form-group">
                <input class="form-control" type="name" id="contact_name" placeholder="Name">
            </div>
            <div class="form-group">
                <input class="form-control" type="mail" id="contact_email" placeholder="E-mail">
            </div>
            <div class="form-group">
                <textarea class="form-control" type="text" id="contact_message" placeholder="Message" rows="3"></textarea>
            </div>
            <div class="form-group">
                <button class="form-control btn" style="display: none;" id="launchModal" data-toggle="modal" data-target="#myModal">Launch</button>
                <button class="btn btn-primary btn-lg" onClick="submitContact()">
                    SEND
                </button>
                <p align="right">Osivis &#169; 2017</p>
            </div>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel"></h4>
                                        </div>
                                        <div class="modal-body" id="myModalBody">
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                  </div>
        </div>