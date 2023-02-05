 
   
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 id="myModalLabel">Please Give Us Your Feedback</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal col-sm-12" action="feedback.php" method="post">
                    <div class="form-group"><label>Name</label><input name="name" value="" class="form-control required" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text" required></div>
                    <div class="form-group"><label>Message</label><textarea  name="message" id="message" value="" class="form-control" placeholder="Your message here.." data-placement="top" data-trigger="manual" required></textarea>Remaining: <b><span class="remaining">150</span></b></div>
                    <div class="form-group"><label>E-Mail</label><input name="email"  value="" class="form-control email" placeholder="email@you.com (Optional)" data-placement="top" data-trigger="manual" data-content="Must be a valid e-mail address (user@gmail.com)" type="text"></div>
                    <div class="form-group"><label>Phone</label><input name="phone"  value="" class="form-control phone" placeholder="+254...(So that we can contact you)" data-placement="top" data-trigger="manual" data-content="Must be a valid phone number" type="text" required></div>
                    <input type="hidden" value="" name="project_id" class="project_id"/>
                    <div class="form-group"><button type="submit" name="save" class="btn btn-success pull-right">Send</button></div>
                </form>
            </div>              
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
            </div>
        </div>
    </div>
</div>