## 2024-06-21 - Fix IDOR in ProjectController
**Vulnerability:** Any authenticated user could access, edit, or delete projects belonging to other users via implicit route model binding in ProjectController because authorization checks were missing.
**Learning:** Implicit route model binding in Laravel does not automatically scope queries to the currently authenticated user unless explicitly defined in policies or queried directly through the user relationship (e.g. `auth()->user()->projects()`).
**Prevention:** Always implement explicit ownership checks (e.g. `if ($model->user_id != auth()->id()) abort(403);`) or utilize Laravel Policies when using implicit route model binding in controllers handling user-specific resources.
