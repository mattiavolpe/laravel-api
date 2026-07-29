## 2024-07-29 - Missing Laravel Policies for Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) in `ProjectController`. Users could view, edit, update, and delete projects belonging to other users.
**Learning:** The codebase utilizes implicit route model binding in controllers (e.g., `ProjectController`) but does not implement Laravel Policies or explicit ownership checks by default.
**Prevention:** Whenever implicit route model binding is used for resources that belong to a specific user, explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) must be manually enforced in the controller methods.
