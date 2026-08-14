## 2024-08-14 - IDOR via Implicit Route Model Binding
**Vulnerability:** Any authenticated user could view, edit, or delete any other user's projects by changing the ID/slug in the URL, because the `show`, `edit`, `update`, and `destroy` methods did not check if the project belonged to the authenticated user.
**Learning:** Laravel's implicit route model binding automatically fetches the model based on the URL parameter, but it does not apply any authorization policies by default unless explicitly configured or checked in the controller.
**Prevention:** Always implement explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies when returning resources via implicit route model binding in controllers.
