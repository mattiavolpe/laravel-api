## 2024-08-05 - Insecure Direct Object Reference in Resource Controllers
**Vulnerability:** Implicit route model binding in controllers (like `ProjectController`) allowed users to access/modify projects belonging to other users.
**Learning:** Laravel's route model binding fetches the model automatically but does not inherently enforce ownership or policies unless explicitly configured. `Type` and `Technology` controllers act as global taxonomies and should *not* have these checks, as doing so causes functional regressions.
**Prevention:** Always implement explicit authorization checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or Laravel Policies when using implicit route model binding for user-owned resources, using `auth()->id()` to avoid facade import issues.
