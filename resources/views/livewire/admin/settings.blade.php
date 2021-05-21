<div class="wrapper">
    <div id="body" class="active">
        <div class="content">
            <div class="container">
                <div class="page-title">
                    <h3>Settings</h3>
                </div>
                <div class="box box-primary">
                    <div class="box-body">
                    <div class="text-info" wire:loading>Loading..</div>
                            <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="add_general_settings()">

                                    <div class="col-md-6">
                                        <p class="text-muted">General settings such as, site title, site about, address and so on.</p>

                                        <div class="form-group">
                                            <label for="site-title" class="form-control-label">Site Title</label>
                                            <input type="text" wire:model.lazy="title" name="site_title" class="form-control" placeholder="site title" >
                                            @error('title') <span class="text-red-500 text-danger text-xs">{{ $message }}</span>  @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="description" class="form-control-label">Site Description</label>
                                            <textarea class="form-control" placeholder="Description" wire:model.lazy="description" name="description"  ></textarea>
                                            @error('description') <span class="text-red-500 text-danger text-xs">{{ $message }}</span>  @enderror
                                        </div>
                                        <div class="form-group" x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"  x-on:livewire-upload-progress="progress = $event.detail.progress">
                                            <label class="form-control-label">Site Logo</label>
                                            <div class="custom-file">
                                                <input type="file" wire:model.lazy="logo" name="site_logo" class="custom-file-input">
                                                <label class="custom-file-label">Choose File</label>
                                            </div>
                                            @error('logo') <span class="text-red-500 text-danger text-xs">{{ $message }}</span>  @enderror
                                            <br>
                                            <div wire:loading wire:target="logo">{{ __('Uploading...') }}</div><br>
                                          <br>
                                          <div x-show="isUploading" style="width: 100%">
                                              <progress class="my-1 progress-bar" role="progressbar" max="100" x-bind:value="progress"></progress>
                                          </div>
                                          @if ($logo)
                                          {{ __('Preview: ') }}<br>
                                              <img width="20%" height="20%" src="{{ $logo->temporaryUrl() }}">
                                          @endif

                                          @if ($c_logo)
                                          {{ __('Current Logo Preview: ') }}<br>
                                              <img width="20%" height="20%" src="{{ env('APP_URL')."storage/".$c_logo }}">
                                          @endif
                                        </div>
                                        <div class="form-group"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"  x-on:livewire-upload-progress="progress = $event.detail.progress">
                                            <label class="form-control-label">Favicon</label>
                                            <div class="custom-file">
                                                <input type="file" name="site_favicon" wire:model.lazy="favicon" class="custom-file-input">
                                                <label class="custom-file-label">Choose File</label>
                                            </div>
                                            @error('favicon') <span class="text-red-500 text-danger text-xs">{{ $message }}</span>  @enderror
                                            <br>
                                              <div wire:loading wire:target="favicon">{{ __('Uploading...') }}</div>
                                            <br>
                                            <div x-show="isUploading" style="width: 100%">
                                                <progress class="my-1 progress-bar" role="progressbar" max="100" x-bind:value="progress"></progress>
                                            </div>
                                            @if ($favicon)
                                            {{ __('Preview: ') }}<br>
                                                <img width="20%" height="20%" src="{{ $favicon->temporaryUrl() }}">
                                            @endif
                                            @if ($c_favicon)
                                            {{ __('Current Favicon Preview: ') }}<br>
                                                <img width="20%" height="20%" src="{{ env('APP_URL')."storage/".$c_favicon }}">
                                            @endif
                                        </div>

                                        <div class="form-group" x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"  x-on:livewire-upload-progress="progress = $event.detail.progress">
                                            <label class="form-control-label"> Logo Icon</label>
                                            <div class="custom-file">
                                                <input type="file" wire:model.lazy="icon_logo" name="icon_logo" class="custom-file-input">
                                                <label class="custom-file-label">Choose File</label>
                                            </div>
                                            @error('icon_logo') <span class="text-red-500 text-danger text-xs">{{ $message }}</span>  @enderror
                                            <br>
                                            <div wire:loading wire:target="icon_logo">{{ __('Uploading...') }}</div><br>
                                          <br>
                                          <div x-show="isUploading" style="width: 100%">
                                              <progress class="my-1 progress-bar" role="progressbar" max="100" x-bind:value="progress"></progress>
                                          </div>
                                          @if ($icon_logo)
                                          {{ __('Preview: ') }}<br>
                                              <img width="20%" height="20%" src="{{ $icon_logo->temporaryUrl() }}">
                                          @endif

                                          @if ($c_icon_logo)
                                          {{ __('Current Logo Preview: ') }}<br>
                                              <img width="20%" height="20%" src="{{ env('APP_URL')."storage/".$c_icon_logo }}">
                                          @endif
                                        </div>

                                        <div class="form-group"  >
                                            <label for="business_email" class="form-control-label">Business Email</label>
                                            <input type="text"placeholder="example@test.com" wire:model.lazy="business_email" name="business_email" class="form-control"">
                                            @error('business_email') <span class="text-red-500 text-danger text-xs">{{ $message }}</span>  @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="business_phone" class="form-control-label">Business Phone</label>
                                            <input type="text"placeholder="+92..........." wire:model.lazy="business_phone" name="business_phone" class="form-control">
                                            @error('business_phone') <span class="text-red-500 text-danger text-xs">{{ $message }}</span>  @enderror
                                        </div>

                                        <div class="form-group text-right">
                                            <button class="btn btn-success" type="submit"><i class="fas fa-check"></i> {{ $btn_text }}</button>
                                        </div>
                                    </div>
                                </form>
                                {{-- table --}}
                                <br><hr>
                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded" >{{ _("Current Settings") }}</div>
                    <table width="100%" class="table table-hover" id="">
                        <thead>
                            <tr>
                                <th>Site Title</th>
                                <th>Site Description</th>
                                <th>Site Address</th>
                                <th>Site Email</th>
                                <th>Site Phone</th>
                                <th>Site logo</th>
                                <th>Site Favicon</th>
                                <th>Site logo icon</th>
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>{{ ($general_setting) ? $general_setting->title : __("Null") }}</td>
                                    <td>{{ ($general_setting) ? $general_setting->description : __("Null") }}</td>
                                    <td>{{ ($general_setting) ? $general_setting->address : __("Null") }}</td>
                                    <td>{{ ($general_setting) ? $general_setting->business_email : __("Null") }}</td>
                                    <td>{{ ($general_setting) ? $general_setting->business_phone : __("Null") }}</td>
                                    <td><img width="100%" height="70px" src="{{env('APP_URL').'storage/'}}{{ ($general_setting) ? $general_setting->logo_path : "" }}"  alt=""></td>

                                    <td><img width="100%" height="70px" src="{{env('APP_URL').'storage/'}}{{ ($general_setting) ? $general_setting->favicon_path : "" }}"  alt=""></td>

                                    <td><img width="100%" height="70px" src="{{env('APP_URL').'storage/'}}{{ ($general_setting) ? $general_setting->icon_logo_path : "" }}"  alt=""></td>

                                    <td>{{ ($general_setting) ? $general_setting->created_at : __("Null")  }}</td>

                                    <td class="text-right">
                                        <button wire:click="edit({{ ($general_setting) ? $general_setting->id : "" }})" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                        <button wire:click="delete({{ ($general_setting) ? $general_setting->id : ""  }})" onclick="return confirm('{{ __('Are You Sure ?')  }}')" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
