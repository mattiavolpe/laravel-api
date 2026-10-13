## 2024-10-13 - IDOR in Project Controller
**Vulnerability:** Insecure Direct Object Reference (IDOR) in ProjectController where any authenticated user could access, modify, or delete other users' projects due to missing authorization checks on implicitly bound route models.
**Learning:** Laravel's route model binding retrieves the model based on the URL parameter, but does not automatically scope it to the authenticated user unless explicitly checked or globally scoped.
**Prevention:** Always enforce explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) on user-specific resources retrieved via route model binding.
