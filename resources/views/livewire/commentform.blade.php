
<form wire:submit.prevent="add_comment()">
    @if (session()->has('message'))

                        <div class="alert alert-success"  >
                            <p  class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </p>
                            {{ session('message') }}
                        </div>
                    </div>
                        @endif
    <div class="comment_form">
        <div class="row">
            <div class="col-sm-4">
                <input class="form-control" name="name" wire:model.lazy="name" type="text" id="name" size="30"  onfocus="if(this.value == 'Name') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Name'; }" value="Name" placeholder="Name" >
                @error('name') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="col-sm-4">
                <input class="form-control" wire:model.lazy="email" name="email" type="text" id="email" size="30" onfocus="if(this.value == 'E-mail') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'E-mail'; }" value="E-mail" placeholder="E-mail">
                @error('email') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
            </div>
        </div>
     </div>
     <div class="comment-box row">
         <div class="col-sm-12">
             <p>
                 <textarea name="comments" wire:model.lazy="comment_content" class="form-control" rows="6" cols="40" id="comments" onfocus="if(this.value == 'Message') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Message'; }" placeholder="Message">Message</textarea>
                 @error('comment_content') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                </p>
         </div>
     </div>
     <button class="btn btn-lg btn-default" type="submit">Post Your Comment</button>
</form>
