<script src='https://www.google.com/recaptcha/api.js'></script>
<section id="contact" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8 col-sm-8 marb20">
                    <div class="contact-info">
                        <h3 class="cnt-ttl">Have A query Or Would like to schedule a home visit?</h3>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                            </div>
                        @endif

                        {!! Form::open(array('route' => 'contact',  'class' => 'form')) !!}

                        <div class="form-group">
                            {!! Form::text('name', null,  ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Your Name']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('email', null, ['class' => 'form-control','required' => 'required', 'placeholder' => 'Your Email']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('subject', null, ['class' => 'form-control','required' => 'required', 'placeholder' => 'Subject']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::textarea('messageBody', null, ['class' => 'form-control','required' => 'required', 'placeholder' => 'Message']) !!}
                        </div>
                        recaptcha box should be here
                        <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>

                        <div class="form-action">
                            {!! Form::submit('Submit', array('class' => 'btn btn-default')) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ contact-->