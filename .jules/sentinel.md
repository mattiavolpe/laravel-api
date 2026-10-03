## 2024-05-24 - IDOR in Route Model Binding
**Vulnerability:** Implicit route model binding in user-specific resources (`ProjectController`) allows Insecure Direct Object Reference (IDOR), letting any authenticated user view, edit, or delete other users' projects via their slugs.
**Learning:** Laravel's route model binding retrieves the model solely based on the route parameter (e.g., `slug`), without automatically validating ownership against the currently authenticated user.
**Prevention:** Always manually enforce explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) on user-specific resources when using implicit route model binding.
