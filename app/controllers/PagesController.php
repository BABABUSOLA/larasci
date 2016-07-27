<?php

class PagesController extends BaseController {

    /**
     * gets the contact page
     * @return Response
     */
    public function contact()
    {
        return View::make('pages.contact');
    }

    public function postContact()
    {
        $data = Input::all();
        $names = explode(' ', $data['fullname']);
        $firstName = $names[0];
        //$lastName = isset($names[1]) ? $names[1]: '';

        $data['first_name'] = $firstName;
        $data['body'] = '<p>New email from '.$data['fullname'].' <br><br>Message: <br></p>';
        if(false)
        {
            //$data['extra'] = 'Assuming we want to add some extra info to the template';
        }
        $data['companyName'] = 'LaraSCI';
        //the use function here helps ensure the data variable is available in our queue closure
        Mail::queue('emails.template', $data, function($message) use($data) {
            $message->from($data['email'], 'Kitulu');
            $message->to('info@larasci.com');
            $message->subject('New contact form email');
        });
        Session::flash('message', "Your message was received successfully. We'll be in touch");
        return View::make('pages.contact')->withFirstname($firstName);
    }

}
