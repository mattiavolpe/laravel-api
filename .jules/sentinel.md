## 2023-11-20 - IDOR Vulnerabilities in Controllers
**Vulnerability:** The `ProjectController` methods like `show`, `edit`, `update`, and `destroy` accept a `Project` model parameter via implicit route model binding. They do not verify if the currently authenticated user actually owns the `Project` before performing actions or returning views.
**Learning:** This is an Insecure Direct Object Reference (IDOR) vulnerability. A user can manipulate the `project` ID in the URL to view, edit, or delete projects belonging to other users.
**Prevention:** Always implement authorization checks for operations involving resources that belong to specific users. Use `if ($model->user_id != auth()->id()) abort(403);` in controllers if policies are not being used.
