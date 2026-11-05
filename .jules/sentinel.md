## 2024-03-24 - IDOR in Project Controller
**Vulnerability:** Missing authorization check on implicitly bound route parameters allows Insecure Direct Object Reference (IDOR), letting users view, edit, and delete other users' projects.
**Learning:** Implicit route model binding in Laravel fetches models automatically but does not scope them to the authenticated user unless explicitly configured or checked.
**Prevention:** Always verify ownership (`if ($model->user_id != auth()->id()) abort(403);`) for user-specific resources when using generic route model binding.
