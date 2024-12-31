<?php
class PlayList 

{
    private  $songs = [];

     public function addsong(Song $song): void
     {
        $this->songs[] = $song;
     }

        public function getSongs(): array
        {
            return $this->songs;
        }
    }