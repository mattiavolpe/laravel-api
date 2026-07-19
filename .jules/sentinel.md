## 2024-07-19 - IDOR via Route Model Binding
**Vulnerability:** ProjectController methods lack ownership verification, allowing users to access other users' projects by modifying the ID in the URL.
**Learning:** Laravel's implicit route model binding does not automatically scope to the authenticated user unless explicitly configured or protected by Policies/ownership checks.
**Prevention:** Always implement Policies or explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) when resolving models in controllers.
