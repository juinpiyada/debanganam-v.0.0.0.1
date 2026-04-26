# GitHub Update & Release Script (v1.0.0)

$version = Read-Host "Enter Version Number (e.g., 1.0.1)"
$details = Read-Host "Enter Update Details (e.g., Fixed mobile header logo)"

Write-Host "`n🚀 Preparing update for $version..." -ForegroundColor Cyan

# Stage all changes
git add .

# Create the commit message
$commitMessage = "Release $version: $details"

# Commit
git commit -m $commitMessage

# Tag the version
git tag -a "v$version" -m "$details"

# Push everything to GitHub
Write-Host "📤 Pushing to GitHub..." -ForegroundColor Yellow
git push origin main
git push origin --tags

Write-Host "`n✅ Successfully pushed $version to GitHub!" -ForegroundColor Green
