<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Google\Cloud\TextToSpeech\V1\AudioConfig;
use Google\Cloud\TextToSpeech\V1\SsmlVoiceGender;
use Google\Cloud\TextToSpeech\V1\SynthesisInput;
use Google\Cloud\TextToSpeech\V1\TextToSpeechClient;
use Google\Cloud\TextToSpeech\V1\VoiceSelectionParams;

class TextToSpeechController extends Controller
{
    public function generateSpeech(Request $request)
    {
        $text = $request->input('text');
        
        $textToSpeechClient = new TextToSpeechClient();
        $inputText = (new SynthesisInput())->setText($text);
        $voice = (new VoiceSelectionParams())
            ->setLanguageCode('en-US') // Set the desired language code (default: English)
            ->setSsmlGender(SsmlVoiceGender::FEMALE); // Set the desired gender
        $audioConfig = (new AudioConfig())
            ->setAudioEncoding(AudioEncoding::MP3); // Set the desired audio encoding
        $response = $textToSpeechClient->synthesizeSpeech($inputText, $voice, $audioConfig);
        $audioContent = $response->getAudioContent();
        
        $folderPath = 'path/to/save';
        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0777, true);
        }
        file_put_contents('path/to/save/audio.mp3', $audioContent);
        
        return redirect()->route('text-to-speech')
            ->with('audio', 'path/to/save/audio.mp3');
    }
}