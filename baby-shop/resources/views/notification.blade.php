<div class="col-md-12">
            @if(count($errors)>0)
                  <div class="alert alert-danger error">
                        <ul>
                              @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                              @endforeach
                        </ul>
                  </div>
            @endif

            @if(Session::has('flash'))
                  <div class="alert alert-success success-flash">{{ Session::get('flash') }}</div>
            @endif
      </div>