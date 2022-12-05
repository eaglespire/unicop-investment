<?php

namespace App\Repositories;

use App\Models\Conversation;
use App\Models\Message;

use Illuminate\Support\Facades\Log;

class Interaction
{

    public function send(int $userId,int $conversationId,string $body)
    {
        //check the conversation table to see if a conversation with the
        //conversation id exists
        try {
            $conversation = Conversation::where('room',$conversationId)->first();
            //dd($conversationId);

            //if it exists, then add the new message to the messages table
            if ($conversation){
                //dd($conversation);
                //add the message
               $newMsg =  Message::create([
                    'conversation_id'=>$conversation->id,
                    'user_id'=>$userId,
                    'body'=>$body
                ]);
               //dd($body);
            }
            //else, it does not exist
            else{
                //create a new conversation
                $newConversation = Conversation::create(['room'=>$userId]);
                //add the message
               $n = Message::create([
                    'conversation_id'=>$newConversation->id,
                    'user_id'=>$userId,
                    'body'=>$body
                ]);

            }
            return true;
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }

//    public function mySentMessages()
//    {
//        return Message::where('user_id',auth()->id())
//            ->latest()->get();
//    }
    public function myConversation(int $userId)
    {
        return Conversation::where('room',$userId)->first();
    }

}
