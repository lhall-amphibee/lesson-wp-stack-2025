// edit.js
import { __ } from '@wordpress/i18n';
import { useBlockProps, InspectorControls, RichText } from '@wordpress/block-editor';
import { PanelBody, TextControl, Button, DateTimePicker } from '@wordpress/components';
import { useState } from '@wordpress/element';
import './editor.scss';

export default function Edit({ attributes, setAttributes }) {
	const {
		title,
		date,
		location,
		sessions = []
	} = attributes;

	const addSession = () => {
		const newSessions = [...sessions, {
			id: Date.now(),
			time: '',
			title: '',
			speaker: '',
			description: ''
		}];
		setAttributes({ sessions: newSessions });
	};

	const updateSession = (index, property, value) => {
		const newSessions = [...sessions];
		newSessions[index][property] = value;
		setAttributes({ sessions: newSessions });
	};

	const removeSession = (index) => {
		const newSessions = [...sessions];
		newSessions.splice(index, 1);
		setAttributes({ sessions: newSessions });
	};

	return (
		<div {...useBlockProps()}>
			<InspectorControls>
				<PanelBody title={__('Program Settings', 'programme')}>
					<TextControl
						label={__('Location', 'programme')}
						value={location || ''}
						onChange={(value) => setAttributes({ location: value })}
					/>
					<TextControl
						label={__('Date', 'programme')}
						value={date || ''}
						onChange={(value) => setAttributes({ date: value })}
					/>
				</PanelBody>
			</InspectorControls>

			<div className="event-program">
				<RichText
					tagName="h2"
					className="event-program-title"
					value={title || ''}
					onChange={(value) => setAttributes({ title: value })}
					placeholder={__('Event Title', 'programme')}
				/>

				<div className="event-program-meta">
					{date && <div className="event-date">{date}</div>}
					{location && <div className="event-location">{location}</div>}
				</div>

				<div className="event-program-sessions">
					<h3>{__('Program Schedule', 'programme')}</h3>

					{sessions.map((session, index) => (
						<div key={session.id} className="event-session">
							<div className="session-header">
								<TextControl
									className="session-time"
									value={session.time}
									onChange={(value) => updateSession(index, 'time', value)}
									placeholder={__('Time', 'programme')}
								/>
								<Button
									isDestructive
									onClick={() => removeSession(index)}
									isSmall
								>
									{__('Remove', 'programme')}
								</Button>
							</div>

							<RichText
								tagName="h4"
								className="session-title"
								value={session.title}
								onChange={(value) => updateSession(index, 'title', value)}
								placeholder={__('Session Title', 'programme')}
							/>

							<RichText
								tagName="div"
								className="session-speaker"
								value={session.speaker}
								onChange={(value) => updateSession(index, 'speaker', value)}
								placeholder={__('Speaker/Presenter', 'programme')}
							/>

							<RichText
								tagName="div"
								className="session-description"
								value={session.description}
								onChange={(value) => updateSession(index, 'description', value)}
								placeholder={__('Session Description', 'programme')}
							/>
						</div>
					))}

					<Button
						isPrimary
						onClick={addSession}
						className="add-session-button"
					>
						{__('Add Session', 'programme')}
					</Button>
				</div>
			</div>
		</div>
	);
}
