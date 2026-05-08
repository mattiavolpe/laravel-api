## 2024-05-24 - IDOR Vulnerabilities in Controllers
**Vulnerability:** Missing authorization checks in resource controllers allowed Insecure Direct Object Reference (IDOR), letting users view, edit, or delete entities (Projects, Types, Technologies) belonging to other users.
**Learning:** Implicit route model binding in Laravel fetches the model instance, but it does not automatically verify that the currently authenticated user owns the retrieved model when a policy isn't applied.
**Prevention:** Always enforce ownership checks (`if ($model->user_id != auth()->id()) abort(403);`) in controller actions (show, edit, update, destroy) or implement Laravel Policies to govern access control.
