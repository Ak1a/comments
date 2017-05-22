@extends('index')

@section('content')

    @foreach($comments as $el)
        <ul>
            <li>
                <div class="panel panel-default">
                    <div class="panel-heading">{!! $el->username !!}
                        <div style="text-align: end;float: right">{!! $el->created_at !!}</div>
                    </div>
                    <div class="panel-body">{!! $el->text !!}</div>

                </div>
                <form action="formAnswer" method="get">
                    <input type="hidden" value="{!! $el->positionOfCom!!}" name="positionOfCom">
                    <input type="submit" value="Answer" class="btn btn-default"><br><br>
                </form>

                @if(isset($answers))
                    @foreach($answers as $answer)
                        @if(count(unserialize($answer->positionOfCom)) == 2  && unserialize($answer->positionOfCom)[0] ==  unserialize( $el->positionOfCom)[0])
                            <ul>
                                <li>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">{!! $answer->username !!}
                                            <div style="text-align: end;float: right">{!! $answer->created_at !!}</div>
                                        </div>
                                        <div class="panel-body">{!! $answer->text !!}</div>

                                    </div>
                                    <form action="formAnswer" method="get">
                                        <input type="hidden" value="{!! $answer->positionOfCom!!}" name="positionOfCom">
                                        <input type="submit" value="Answer" class="btn btn-default"><br><br>
                                    </form>
                                </li>
                            </ul>
                        @else
                            @foreach($answers as $answerA)
                                @if(count(unserialize($answerA->positionOfCom))== count(unserialize($answer->positionOfCom)) && 2 == count(array_diff(unserialize($answer->positionOfCom),unserialize($answerA->positionOfCom))) && unserialize($answer->positionOfCom)[0] ==  unserialize( $el->positionOfCom)[0])
                                    <ul>
                                        <li>

                                            {{--@if()--}}
                                                <input type="hidden"
                                                       value="{!! count(unserialize($answer->positionOfCom)) !!}"
                                                       id="marg">
                                                @for($i=2;$i<count(unserialize($answer->positionOfCom)); $i++)
                                                    <ul class="marg">
                                                        @endfor
                                                        <li>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">{!! $answerA->username !!}
                                                                    <div style="text-align: end;float: right">{!! $answer->created_at !!}</div>
                                                                </div>
                                                                <div class="panel-body">{!! $answerA->text !!}</div>

                                                            </div>
                                                            <form action="formAnswer" method="get">
                                                                <input type="hidden"
                                                                       value="{!! $answerA->positionOfCom!!}"
                                                                       name="positionOfCom">
                                                                <input type="submit" value="Answer"
                                                                       class="btn btn-default"><br><br>
                                                            </form>
                                                        </li>
                                                        @for($i=2;$i<count(unserialize($answer->positionOfCom)); $i++)
                                                    </ul>
                                                @endfor
                                            {{--@endif--}}

                                        </li>
                                    </ul>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                @endif
            </li>
        </ul>
    @endforeach
    <script>
        $('.marg').css('padding-left', $('#marg').val() * 1000)
    </script>


@stop
