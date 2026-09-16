<label>Previous Odometer Value: {{$form->prevOdometer}}</label><br>
<label>Current Odometer Value: {{$form->currOdometer}}</label><br>
<label>Date of last change: {{$form->lastDate}}</label><br>
<p>
@if ($form->currOdometer - $form->prevOdometer > 5000 || \Carbon\Carbon::parse($form->lastDate)->lt(now()->subMonths(6)))
    This car is due for an oil change
@else
    This car is not due for an oil change
@endif
</p>
<a href="/">Return to form</a>