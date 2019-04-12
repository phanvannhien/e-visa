@extends('theme.layouts.app')
@section('main')

<div id="breadcrumbs">
    <div class="container">
        {{ Breadcrumbs::render('contact') }}
    </div>
</div>

<section class="mb-5">
    <div class="container">
        <p>
            All information entered on this form will be kept strictly confidential and subject to our privacy policy once received by us.
            Your transaction will be secured using SSL/TLS encryption.
        </p>
        <div class="row">

            <div class="col-md-6 offset-3">
                @include('theme.partials.messages')
                <form action="{{ route('company.contact.post') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="full_name" class="col-sm-3">Full name <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input id="full_name" type="text" class="form-control" name="full_name" value="{{ Auth::user()->email ?? '' }}" placeholder="" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-sm-3">Phone <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{ Auth::user()->phone ?? '' }}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3">Email <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" placeholder="Email" value="{{ Auth::user()->email ?? '' }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="subject" class="col-sm-3">Subject <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="subject" placeholder="" value="{{ old('subject') }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="topic" class="col-sm-3">What can we help you with? <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <select name="topic" id="topic" class="form-control">
                                <option value="Visa Services">Visa Services</option>
                                <option value="Account and payment">Account and payment</option>
                                <option value="Extra service options">Extra service options</option>
                                <option value="Technical Inquiries">Technical Inquiries</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="subject" class="col-sm-3">Content <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="subject" class="col-sm-3">Attach file</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <p>Attach Files
                                (*.jpg, *.jpeg, *.png, *.gif, *.bmp, *.pdf, *.txt, *.doc, *.docx, *.xls, *.xlsx, <= 20MB/file, limit 3 files)</p>
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary float-right">SEND</button>
                </form>
            </div>
        </div>
    </div>
</section>

@stop