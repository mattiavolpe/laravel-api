## 2024-09-20 - Fix IDOR in Project Controller
**Vulnerability:** IDOR vulnerability in ProjectController where users could view, edit, update, or delete projects belonging to other users.
**Learning:** Implicit route model binding in Laravel does not automatically scope the model to the authenticated user.
**Prevention:** Manually enforce explicit ownership checks (e.g., if ($model->user_id != auth()->id()) abort(403);) on user-specific resources to prevent unauthorized access.
