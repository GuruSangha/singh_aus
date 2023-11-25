<!DOCTYPE html>
<html>
<head>
    <title>{{ $details['title'] }}</title>
</head>
<body>
    <?php //echo'<pre>';print_r($details['data']);die; ?>
    <h1>{{ $details['title'] }}</h1>
    <h4> First Name: {{$details['data']['contactfname']}}</h4></br>
    <h4> Last Name: {{$details['data']['contactlname']}}</h4></br>
    <h4> Email ID: {{$details['data']['contactemail']}}</h4></br>
    <h4> Contact Number: {{$details['data']['contactemail']}}</h4></br>
    <p>Client is trying to reach us with industry experience : {{$details['data']['industryExperience']}} and qualification : {{$details['data']['qualification']}} </p>
    <p>
    Total experience is {{$details['data']['experienceyears']}}
    @if($details['data']['experience_loc'] == 'both')
        Client has Overseas and Australia experience.
    @else
        Client got experience from : "{{$details['data']['experience_loc']}}
    @endif
    </p>
    <p>Client is live in {{$details['data']['inf_custom_State1']}} state</p>
    @if($details['data']['formalqulification']=='Yes')
    <p> Yes!, Client has formal qualification</p>
    @else
    <p>There is no formal qualification.</p>
    @endif
    @if(isset($details['data']['inf_custom_formalqualifications']))
    <p>More about qualification: {{$details['data']['inf_custom_formalqualifications']}}</p>
    @endif
    <br>Additional Information: {{$details['data']['inf_custom_additionalquestions']}}
   
    <p>Thank you</p>
</body>
</html>