<body style="width:620px;margin:0px auto;line-height:1.3;font-family:Arial;">
    <div class="wrapper">
        <div class="content" style="/*background:#f6f3ef;"> 

            <div class="details" style="padding:10px 20px;">
                <p><b>Dear {{ $first_name }}</b>,<br /><br /></p>

                @if(isset($body))
                <p>{{ $body }}</p>
                @endif
                
                @if(isset($extra))
                <p>{{ $extra }}</p>
                @endif

                <br />
                <p><br /> 

                    <b>Cheerfully Yours,</b><br />
                    {{ $companyName }}<br /> 
                </p><br />
            </div>
        </div>
    </div>
</body>
