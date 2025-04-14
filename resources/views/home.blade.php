@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <div id="content">
        <div class="p-4">
            <div class="level-header">
                <i class="fa-solid fa-flag "></i>
                <?php
                $scoreRecord=Auth::user()->scores->where('completed',0)->first()??Auth::user()->scores->last() ;
                ?>
                <div class="ml-2">{{$scoreRecord->level->name}}</div>

                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="level-title">{{Auth::user()->targetLanguage->name}} - Level <span>{{$scoreRecord->level->order}}</span></div>

            <div class="score-container">
                <div class="score-header">
                    <span>My score</span>
                    <span class="points">{{$scoreRecord->score}} pts</span>
                </div>
                <div class="score-content container">
                    <div class="row">
                        <div class="score-section learn col-md-4">
                            <h3>🚀 Learn words <span class="points">0 pts</span></h3>
                            <p>0 Words fully learned</p>
                            <p>1 Started learning</p>
                        </div>
                        <div class="score-section hear col-md-4">
                            <h3>⏯ Hear my words <span class="points">0 pts</span></h3>
                            <p>0 New videos watched</p>
                            <p>0 Replayed</p>
                        </div>
                        <div class="score-section use col-md-4">
                            <h3>💬 Use my words <span class="points">0 pts</span></h3>
                            <p>0 New conversations completed</p>
                            <p>0 Replayed</p>
                        </div>
                    </div>

                </div>
            </div>


            <div class="fixed-bar">
                <div class="content">
                    <span class="icon">🚀</span>
                    <div class="text">
                        <p class="title">Learn words</p>
                        <p class="subtitle">Continue: Meeting New People</p>
                    </div>
                </div>
                <button class="start-btn">Start</button>
            </div>

        </div>



</div>
@endsection
