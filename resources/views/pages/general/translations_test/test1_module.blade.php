<section id="main-content">
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
                    <form method="POST" action="">
                        {{ csrf_field() }}
                        <textarea class="textarea form-control" rows="10" cols="80" placeholder="Enter text ..." style="width: 100%; height: 506px"></textarea>
                        <br>
                        <button type="submit" class="btn btn-success">Submit Work</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>