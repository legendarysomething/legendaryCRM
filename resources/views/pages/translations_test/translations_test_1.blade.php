<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default animated fadeInUp">
            <div class="panel-heading">
                <h3 class="panel-title">Instructions</h3>
            </div>
            <div class="panel-body">
                <h2>@lang('translationstest.tt_1')</h2>
                <br>
                <ol>
                    <li>@lang('translationstest.tt_2')</li><br>
                    <li>@lang('translationstest.tt_3')</li><br>
                    <li>@lang('translationstest.tt_4')</li><br>
                    <li>@lang('translationstest.tt_5')</li><br>
                </ol>
                
                <h2>@lang('translationstest.tt_6')</h2>
                <br>
                <ul>
                    <li>@lang('translationstest.tt_7')</li><br>
                    <li>@lang('translationstest.tt_8')</li><br>
                    <li>@lang('translationstest.tt_9')</li><br>
                </ul>
                <hr><br>
                <h3>@lang('translationstest.tt_10')</h3><br>
                {{-- Buttons to download test content --}}
                <a href="{{ asset('downloads/translations_test/TestMaterial.pdf') }}" style="color: white;" download="" class="btn btn-success">@lang('translationstest.dl_1')</a>
                &nbsp;&nbsp;&nbsp;
                <a href="{{ asset('downloads/translations_test/SampleTranslation.pdf') }}" style="color: white;" download="" class="btn btn-success">@lang('translationstest.dl_2')</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default animated fadeInUp">
            <div class="panel-heading">
                <h3 class="panel-title">Submission Attempt</h3>
            </div>
            <div class="panel-body">
                <form method="POST" action="" id="test_submission_form">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="test_num" value="1">

                    <textarea class="textarea form-control" rows="10" cols="80" name="submission" placeholder="Enter text ..." style="width: 100%; height: 506px; {{$errors->has('submission') ? 'border-color: #e25d5d;' : ''}}"></textarea>
                    <br>


                    <span id="submit_work" class="btn btn-success">Submit Work</span>
                    &nbsp;&nbsp;&nbsp;
                    @if ($errors->any()) 
                    <span><label class="error">{{$errors->first('submission')}}</label></span> 
                    @endif

                </form>
            </div>
        </div>
    </div>
</div>
