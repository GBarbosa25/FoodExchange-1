<?php

namespace App\Http\Conversations;

use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class SelectServiceConversation extends Conversation
{
    public function askService()
    {
        $question = Question::create('What ONGs are you looking for to help?')
            ->callbackId('select_service')
            ->addButtons([
                Button::create('Inner City Helping Homeless')->value('Inner City Helping Homeless'),
                Button::create('Capuchin Day Centre')->value('Capuchin Day Centre'),
                Button::create('Focus Ireland')->value('Focus Ireland'),
                Button::create('Dublin Simon Community')->value('Dublin Simon Community'),
                Button::create('Feed Our Homeless')->value('Feed Our Homeless'),
                Button::create('Peter McVerry Trust')->value('Peter McVerry Trust'),
                Button::create('Tallaght Homeless Advice Unit')->value('Tallaght Homeless Advice Unit'),
                Button::create('Volunteer Ireland')->value('Volunteer Ireland'),
                Button::create('Dublin Simon High Support Housing')->value('Dublin Simon High Support Housing'),
                Button::create('FoodCloud')->value('FoodCloud'),
                Button::create('Longfields Hostel')->value('Longfields Hostel')
            ]);

        $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                $this->bot->userStorage()->save([
                    'service' => $answer->getValue(),
                ]);

                $this->bot->startConversation(new DateTimeConversation());
            }
        });
    }

    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->askService();
    }
}
