## 2023-10-27 - IDOR via Implicit Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) allowed users to view, edit, or delete projects belonging to other users by changing the ID in the URL.
**Learning:** Implicit route model binding in Laravel fetches models directly by ID but does not automatically enforce user ownership or authorization. Without Laravel Policies, controllers are vulnerable to IDOR by default.
**Prevention:** Always manually enforce ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) on implicitly bound models, or implement and utilize Laravel Policies for authorization.
