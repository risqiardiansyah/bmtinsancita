<!-- ======= Contact Section ======= -->
<section class="contact-us-wrapper">
    @if(session("error"))
    <div class="alert alert-danger">{!! session("error") !!}</div>
    @endif
    @if(session("success"))
    <div class="alert alert-success">{!! session("success") !!}</div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <div class="mini-contact">
                <h2>Email us</h2>
                <p>If you're encountering an issue or problem when working with primex you can always email us directly
                    or via the form below</p>

                <a href="mailto:{{$site->email}}">{{$site->email}}</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mini-contact">
                <h2>Call us</h2>
                <p>If you're encountering an issue or problem when working with primex you can always email us directly
                    or via the form below</p>

                <a href="tel:{{$site->telepon}}">{{$site->telepon}}</a>
            </div>
        </div>
    </div><!-- /.row -->

    <div class="row">
        <div class="col-md-8">
            <div class="map-wrapper">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        {!! $site->google_map!!}
                        <a href="https://www.embedgooglemap.net/blog/nordvpn-coupon-code/">nordvpn codes</a></div>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 500px;
                            width: 679px;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 500px;
                            width: 679px;
                        }

                    </style>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mini-contact">
                <h2>Visit us</h2>
                <address>
                    {!! $site->alamat !!}
                </address>
            </div>
        </div>
    </div><!-- /.row -->


    <div class="directions-wrapper">
        <div class="contact-directions">
            <h2>Jam Operasional Kantor</h2>
            <p>{!! $site->jam_operasional !!}</p>
        </div>
    </div><!-- /.directions-wrapper -->

    <div class="contact-us-form">
        <h2>Drop us a line</h2>
        <form action="{{ asset('proses_pesan') }}" method="POST">
            @csrf
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <label class="sr-only" for="name">Name</label>
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                        <input id="name" name="name" type="text" class="form-control"
                            onkeypress="return hanyaHuruf(this);" required="" placeholder="Name"
                            value="{{ old("name") }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <label class="sr-only" for="email">Email address</label>
                        <span class="input-group-addon" id="basic-addon2"><i class="fa fa-envelope"></i></span>
                        <input id="email" name="email" type="email" class="form-control" required="" placeholder="Email"
                            value="{{ old("email") }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <label class="sr-only" for="phone">Phone</label>
                        <span class="input-group-addon" id="basic-addon3"><i class="fa fa-phone"></i></span>
                        <input id="phone" name="phone" type="text" class="form-control" placeholder="Phone" required
                            value="{{ old("phone") }}" onkeypress="return hanyaAngka(this);">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <label class="sr-only" for="subject">Subject</label>
                        <span class="input-group-addon" id="basic-addon4"><i class="fa fa-file-text"></i></span>
                        <input id="subject" name="subject" type="text" class="form-control" required=""
                            placeholder="Subject" value="{{ old("subject") }}">
                    </div>
                </div>
            </div>

            <div class="input-group text-area">
                <label class="sr-only" for="message">Message</label>
                <span class="input-group-addon" id="basic-addon5"><i class="fa fa-file-text-o"></i></span>
                <textarea id="message" name="contents" class="form-control" rows="6" required="" placeholder="Message"
                    {!! old("content") !!}></textarea>
            </div>
            <div class="input-group">
                {!! NoCaptcha::display() !!}
            </div>

            <button type="submit" class="btn btn-primary btn-lg">Kirim</button>
        </form>
    </div>

</section><!-- /.content-wrapper -->
