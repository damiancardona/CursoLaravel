<?php

use App\Note;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NoteExerciseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use DatabaseTransactions;

    public function test_notes_sumary_and_notes_details()
    {
        $text = 'Begin of the note:';
        $text .= ' Omnis assumenda ut veritatis earum quaerat maiores sunt. Non voluptatem assumenda adipisci velit harum voluptatem. Temporibus aut eveniet ullam. Quia aut culpa voluptatem ut';
        $text .= 'End of the Note';
        $note = Note::create(['note'=>$text]);

        $this->visit('notes')
            ->see('Begin of the note')
            ->seeInElement('.label', 'Otros')
            ->dontSee('End of the Note')
            ->seeLink('View Note')
            ->click('View Note')
            ->seePageIs("notes/details/$note->id")
            ->see($text)
            ->seeLink('Back to List')
            ->click('Back to List')
            ->seePageIs('notes');
    }
}
